class Name extends React.Component {
    render() {
        return <h1>adnane</h1>;
    }
}


class Age extends React.Component {

    constructor(){
        super(); 
        this.state = {age : '23'}
        console.log("yo")
    }

    render() {
        return <p>My age is {this.state.age}</p>
    }
}


class Run extends React.Component {
    render() {
        return <p>Hello!!!</p>
    }
}


ReactDOM.creatRoot(<Age />, document.getElementById('rootone')); 
ReactDOM.render(<Run/>, document.getElementById('obione'))