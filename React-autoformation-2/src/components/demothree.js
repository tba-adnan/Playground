import React from "react";

class Navbar extends React.Component {
    constructor(){
        super(); 
        this.state = {speed:0}
    }

addSpeed = () => {
 this.setState({speed:100})
}

    render(){
        return(
            <div>
                <br></br>
                <button onClick={this.addSpeed}>Speed plus plus</button>
                <p>we reached the speed of {this.state.speed} km/h </p>
            </div>
        );
    }
}

export default Navbar;