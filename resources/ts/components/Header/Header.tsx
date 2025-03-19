import React from "react";
import { Link } from "react-router-dom";
import '../../../css/Header.css'; // 必要ならスタイルを適用

const Header: React.FC = () => {
  return (
    <header>
      <Link to="/" id="homepage-name">My Homepage</Link>
      <div className="center-container">
        <Link to="/search"><button id="search-button">Search</button></Link>
        <Link to="/post"><button id="post-button">Post</button></Link>
        <Link to="/account"><button id="account-button">Account</button></Link>
      </div>
      <Link to="/settings"><button id="settings-button">Settings</button></Link>
    </header>
  );
};

export default Header;
