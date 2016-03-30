import React from 'react';

// UI dependencies
import LeftNav from 'material-ui/lib/left-nav';
import List from 'material-ui/lib/lists/list';
import ListItem from 'material-ui/lib/lists/list-item';
import AutoComplete from 'material-ui/lib/auto-complete';
import FlatButton from 'material-ui/lib/flat-button';
import Dialog from 'material-ui/lib/dialog';
import Divider from 'material-ui/lib/divider';
import Popover from 'material-ui/lib/popover/popover';
import PopoverAnimationFromTop from 'material-ui/lib/popover/popover-animation-from-top';

// icons
import AvPlaylistAdd from 'material-ui/lib/svg-icons/av/playlist-add'
import AvAlbum from 'material-ui/lib/svg-icons/av/album'
import EditorFormatListNumbered from 'material-ui/lib/svg-icons/editor/format-list-numbered'
import SocialGroup from 'material-ui/lib/svg-icons/social/group'
import MapsPlace from 'material-ui/lib/svg-icons/maps/place'
import ActionInfo from 'material-ui/lib/svg-icons/action/info';
import ActionHome from 'material-ui/lib/svg-icons/action/home';
import ImageFlashOn from 'material-ui/lib/svg-icons/image/flash-on';

import * as Schema from '../constants/Schema'

class NavMenu extends React.Component {
	constructor(props) {
		super(props);
		this.displayName = 'NavMenu';
		this.state = {
			// Table Schema Dialog
			openTableSchemaDialog: false,
			tableSchemaDialogContent: "",
			tableSchemaDialogTitle: "",
			// Pokemon Moves Dialog
			openPokemonMovesDialog: false,
			moveDiagOpen: false,
			pokemonList: [],
			// Pokemon Available at location X
			openPokemonAvailableDialog: false,
			pokemonAvailableDiagOpen: false,
			locationList: [],
			// Where can i find this pokemon
			openPokemonLocationDialog: false,
			pokemonLocationDiagOpen: false,
			// For popovers
			anchorOrigin: {"horizontal":"right","vertical":"top"},
			targetOrigin: {"horizontal":"left","vertical":"top"},
			openPopover: false,
			anchorEl: undefined,
			autocompleteDataSource: [],
			preloadedAutcompleteDataSource: false
		}
	}

	componentDidMount() {
		let p1 = this.props.query("SELECT name from pokemons")
		let p2 = this.props.query("SELECT name from locations")

		Promise.all([p1, p2]).then(([res1, res2]) => {
			var json = JSON.parse(res1);
			json.shift();
			var pokemonList = [];

			for (var i in json)
				pokemonList.push(json[i].name);
			
			// work with locationList
			var json2 = JSON.parse(res2);
			json2.shift();
			var locationList = [];

			for (var i in json2)
				locationList.push(json2[i].name);

			this.setState({
				locationList: locationList,
				pokemonList: pokemonList,
				preloadedAutcompleteDataSource: true
			})
		});
	}

	openTableSchemaDialog(dialogContent, dialogTitle) {
		this.setState({
			openTableSchemaDialog: true,
			tableSchemaDialogContent: dialogContent,
			tableSchemaDialogTitle: dialogTitle
		})
	}

	closeTableSchemaDialog() {
		this.setState({
			openTableSchemaDialog: false
		})
	}

	handlePokemonMovesDialogSubmit(val) {
		var query = 
		"SELECT m.*, pm.learned_at \r\n\
FROM pokemons p, pokemon_moves pm, moves m \r\n\
WHERE pokemon = p.id and move = m.id and p.name='" + val + "'";
		this.props.displayAndSubmitQuery(query);
	};

	handlePokemonAvailableDialogSubmit(val) {
		var query =	
		"select p.id as 'id', p.name as 'Pokemon', p.catch_rate as 'Catch Rate' \r\n\
from \r\n\
pokemon_locations pl \r\n\
join locations l on pl.location = l.id \r\n\
join pokemons p on p.id = pl.pokemon \r\n\
where l.name = '" + val + "'"
		this.props.displayAndSubmitQuery(query);
	};

	handlePokemonLocationDialogSubmit(val) {
		var query = 	"select l.name as 'Location' \r\n\
FROM \r\n\
pokemon_locations pl \r\n\
JOIN locations l on pl.location = l.id \r\n\
JOIN pokemons p on p.id = pl.pokemon \r\n\
WHERE p.name = '" + val + "'";
		this.props.displayAndSubmitQuery(query);
	};

	openTrainerDialog()  {

	}

	openPopover({
		dataSource,
		submitHandler,
		hintText
	}, event) {
		this.setState({
			openPopover: true,
			autocompleteDataSource: dataSource,
			autocompleteHintText: hintText,
			anchorEl: event.currentTarget,
			autocompleteSubmitHandler: (val) => { 
				submitHandler(val); 
				this.setState({
					openPopover: false
				}) 
			}
		})
	}

	render() {
		if (!this.state.preloadedAutcompleteDataSource) return <h3>Loading...</h3>
		return (<LeftNav open={this.props.open}>
			<Popover
				open={this.state.openPopover}
				anchorEl={this.state.anchorEl}
				anchorOrigin={this.state.anchorOrigin}
				targetOrigin={this.state.targetOrigin}
				onRequestClose={() => { this.setState({ openPopover: false })}}
				animation={PopoverAnimationFromTop}>
				<div style={style.popover}>
					{ this.state.autocompleteDataSource ?
					<AutoComplete
						ref='popoverAutocomplete'
						hintText={this.state.autocompleteHintText}
						onNewRequest={this.state.autocompleteSubmitHandler}
						filter={AutoComplete.fuzzyFilter}
						dataSource={this.state.autocompleteDataSource}
						triggerUpdateOnFocus={true} /> : <h3>Loading...</h3>
					}
				</div>
			</Popover>
			<Dialog
				title={this.state.tableSchemaDialogTitle}
				modal={false}
				open={this.state.openTableSchemaDialog}
				onRequestClose={this.closeTableSchemaDialog.bind(this)}
				style={dialogStyle}>
				{this.state.tableSchemaDialogContent}
			</Dialog>
			<List>
				<ListItem
					onClick={() => { window.location = '/' }}
					leftIcon={<ActionHome></ActionHome>}
					primaryText="Home">
				</ListItem>
			</List>
			<Divider></Divider>
			<ListItem
				primaryText="Table Schemas"
			        leftIcon={<ActionInfo />}
			        initiallyOpen={false}
			        primaryTogglesNestedList={true}
			        nestedItems={[
					<ListItem
						primaryText="Pokemon"
						onTouchTap={this.openTableSchemaDialog.bind(this, Schema.dialogData[0][1], Schema.dialogData[0][0])}
						/>,
					<ListItem
						primaryText="Trainers"
						onTouchTap={this.openTableSchemaDialog.bind(this, Schema.dialogData[1][1], Schema.dialogData[1][0])}
						/>,
					<ListItem
						primaryText="Moves"
						onTouchTap={this.openTableSchemaDialog.bind(this, Schema.dialogData[2][1], Schema.dialogData[2][0])}
						/>,
					<ListItem
						primaryText="Locations"
						onTouchTap={this.openTableSchemaDialog.bind(this, Schema.dialogData[3][1], Schema.dialogData[3][0])}
						/>,
					<ListItem
						primaryText="Pokemon Moves"
						onTouchTap={this.openTableSchemaDialog.bind(this, Schema.dialogData[4][1], Schema.dialogData[4][0])}
						/>,
					<ListItem
						primaryText="Pokemon Locations"
						onTouchTap={this.openTableSchemaDialog.bind(this, Schema.dialogData[5][1], Schema.dialogData[5][0])}
						/>,
					<ListItem
						primaryText="Pokemon Trainers"
						onTouchTap={this.openTableSchemaDialog.bind(this, Schema.dialogData[6][1], Schema.dialogData[6][0])}
						/>,]}
			/>
			<Divider></Divider>
			<List subheader="Predefined SQL Queries">
				<ListItem
					onClick={this.props.displayAndSubmitQuery.bind(this, 'SELECT * from pokemons')}
					primaryText="All Pokemon"
					leftIcon={<EditorFormatListNumbered></EditorFormatListNumbered>}/>
				<ListItem
					primaryText="Where is this pokemon?"
					onClick={this.openPopover.bind(this, {
						dataSource: this.state.pokemonList,
						submitHandler: this.handlePokemonLocationDialogSubmit.bind(this),
						hintText: 'Pokemon'
					})}
					leftIcon={<AvAlbum></AvAlbum>}/>
				<ListItem
					primaryText="What can I catch here?"
					onClick={this.openPopover.bind(this, {
						dataSource: this.state.locationList,
						submitHandler: this.handlePokemonAvailableDialogSubmit.bind(this),
						hintText: 'Location'
					})}
					leftIcon={<MapsPlace></MapsPlace>}/>
				<ListItem
					primaryText="Pokemon moves"
					onClick={this.openPopover.bind(this, {
						dataSource: this.state.pokemonList,
						submitHandler: this.handlePokemonMovesDialogSubmit.bind(this),
						hintText: 'Pokemon'
					})}
					leftIcon={<ImageFlashOn></ImageFlashOn>}/>
				<ListItem
					primaryText="Find a Trainer's Pokemon"
					onClick={this.openTrainerDialog.bind(this)}
					leftIcon={<ImageFlashOn></ImageFlashOn>}/>
			</List>
			<Divider></Divider>
			<List subheader="Analytics">
				<ListItem
					primaryText="Pokemon grouped by type"
					onClick={() => { window.location='/graphs' }} />
				<ListItem
					primaryText="Most popular Pokemon"
					onClick={() => { window.location='/Popularity' }} />
			</List>
		</LeftNav>);
	}
}

const style = {
	popover: {
		padding: '5px',
		paddingLeft: '15px',
		paddingRight: '15px'
	}
}

const dialogStyle = {
	whiteSpace: 'pre-wrap'
};

export default NavMenu;