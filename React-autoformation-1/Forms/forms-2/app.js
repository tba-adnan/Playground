class NameForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {value: ''};

    this.handleChange = this.handleChange.bind(this);
    this.addTask = this.addTask.bind(this);
  }

  handleChange(event) {
    this.setState({value: event.target.value});
  }

  addTask(event){
    alert("Beeep!")
    event.preventDefault();
  }

  render() {
    return (
      <form onSubmit={this.addTask}>
        <label>
          Name:
          <input type="text" value={this.state.value} onChange={this.handleChange} />
        </label>
        <input type="submit" value="Submit" />
      </form>
    );
  }
}

ReactDOM.render(<NameForm />, document.getElementById('root'))