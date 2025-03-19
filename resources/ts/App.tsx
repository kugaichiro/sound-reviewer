import React from 'react';
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import '../css/App.css';
import Home from './pages/Home/Home';
import Search from './pages/Search/Search';
import Post from './pages/Post/Post';
import Account from './pages/Account/Account'

const App: React.FC = () => {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/Search" element={<Search />} />
        <Route path="/Post" element={<Post />} />
        <Route path="/Account" element={<Account />} />
      </Routes>
    </Router>
  );
}

export default App;
