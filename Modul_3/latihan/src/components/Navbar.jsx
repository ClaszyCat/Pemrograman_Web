import React from "react";
import { useNavigate } from "react-router-dom";

const Navbar = () => {
  const navigate = useNavigate();

  return (
    <div>
      <nav>
        <div>
          <ul>
            <li>
              <button onClick={() => navigate("/")}>Home</button>
            </li>
            <li>
              <button onClick={() => navigate("/about")}>About</button>
            </li>
            <li>
              <button onClick={() => navigate("/contact")}>Contact</button>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  );
};

export default Navbar;
