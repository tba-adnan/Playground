import React, { Component } from "react";


class Demotwo extends React.Component {
    constructor(){
        super(); 
        this.state = {name:"adnane"}
        console.log(this.state)
    }
    

    componentDidMount(){
        this.setState({name:"amjad"})
    }


change = () => {
    this.setState({name:"haitam"})
}



    render(){
        return(
            <div>
                <p>my name is {this.state.name} </p>
                <button onClick={this.change}>change name</button>
            </div>
        );
    }
}


export default Demotwo;