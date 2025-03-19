import React from 'react';
import ReactDOM from 'react-dom/client';
import '../css/index.css';
import App from './App';

// rootElement の型を明示して null チェック
const rootElement = document.getElementById('root') as HTMLElement | null;

if (rootElement) {
  const root = ReactDOM.createRoot(rootElement);

  root.render(
    <React.StrictMode>
      <App />
    </React.StrictMode>
  );
} else {
  console.error('Failed to find the root element.');
}
