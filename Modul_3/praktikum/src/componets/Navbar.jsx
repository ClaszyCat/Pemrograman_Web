import { Link } from "react-router-dom";

function Navbar() {
  return (
    <nav className="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div className="container-fluid">
        <img src="images/logo-ilab.png" alt="logo-ilab" width="100" />
        <button
          className="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="navbarSupportedContent">
          <ul className="navbar-nav me-auto mb-2 mb-lg-0 navbar-nav mx-auto">
            <Link to="/" className="nav-link">
              {" "}
              <li className="nav-item">Home</li>
            </Link>
            <Link to="/about" className="nav-link">
              {" "}
              <li className="nav-item">About Us</li>
            </Link>
            <Link to="/contact" className="nav-link">
              {" "}
              <li className="nav-item">Contact</li>
            </Link>
          </ul>
          <div className="row">
            <div className="col">
              <form className="d-flex" role="search">
                <button className="btn btn-outline-dark m-lg-3" type="submit">
                  SIGN UP
                </button>
              </form>
            </div>
          </div>
          <div className="row">
            <div className="col">
              <form className="d-flex" role="search">
                <button className="btn btn-primary" type="submit">
                  LOG IN
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
  );
}

export default Navbar;
