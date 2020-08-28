import React, { useState, useEffect }  from 'react';
import logo from './logo.svg';
import './App.css';
import axios from 'axios'; 

function App() {

  const [user, setUser] = useState(null);

  function fetchUserData() {
    axios({ 
			method: 'get',
      url: 'https://container-drupal-ssh.azurewebsites.net/env.php'
		})
    .then(res => {
      console.log(res.data);
      setUser(res.data);
    })
    .catch(err => {
      console.log(err);
      setUser('null');
    })
  }

  useEffect(() => {
    fetchUserData();
  });

  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          env: {user}
        </p>
      </header>
    </div>
  );
}

export default App;
