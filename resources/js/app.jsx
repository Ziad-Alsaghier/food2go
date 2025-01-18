import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Users from "../js/Users";

const App = () => (
      <Router>
        <Routes>
            <Route path="/usersData" element={<Users />} />
            {
                /* Add other routes here */
            }
        </Routes>
    </Router>
);

ReactDOM.createRoot(document.getElementById('app')).render(<App />);
