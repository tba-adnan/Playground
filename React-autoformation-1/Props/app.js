function Car(props) {
    return <h2>I am a { props.brand }!</h2>;
  }
  
  const myElement = <Car brand="Ford" />;
  // render.
  const root = ReactDOM.createRoot(document.getElementById('root'));
  root.render(myElement);
  