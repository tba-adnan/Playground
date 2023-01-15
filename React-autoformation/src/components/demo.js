import React from "react";
// 
class Demo extends React.Component {
  constructor() {
    super();
    this.state = {name:"cool demo"}
  }

  change = () =>{
    this.setState({name:"bad demo"})
  }
  
  render(){
    return (
    <div>
    <h1>this a {this.state.name}</h1>
    <button onClick={this.change}>Click</button>
    </div>
    );
  }
}

export default Demo;