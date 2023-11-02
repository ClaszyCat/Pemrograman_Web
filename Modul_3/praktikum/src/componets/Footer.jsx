function Footer() {
  return (
    <div className="container">
      <footer className="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5">
        <div className="col mb-3">
          <a
            href="#"
            className="d-flex align-items-center mb-3 link-dark text-decoration-none">
            <img
              src="images/logo-ilab.png"
              alt="iLab Logo"
              style={{ marginTop: "3rem", marginLeft: "3rem" }}
            />
          </a>
          <p
            className="d-inline"
            style={{ marginLeft: "2rem", marginTop: "5rem" }}>
            Copyright &copy; 2023 Rafidhiya
          </p>
        </div>

        <div className="col mb-3"></div>

        <div className="col mb-3">
          <h5 className="mb-3" style={{ opacity: 0.25 }}>
            Service
          </h5>
          <ul className="nav flex-column">
            <li className="nav-item mb-3">
              <a href="#" className="nav-link p-0 text-body-secondary fw-bold">
                Email Marketing
              </a>
            </li>
            <li className="nav-item mb-3">
              <a href="#" className="nav-link p-0 text-body-secondary fw-bold">
                Campaigns
              </a>
            </li>
            <li className="nav-item mb-3">
              <a href="#" className="nav-link p-0 text-body-secondary fw-bold">
                Branding
              </a>
            </li>
            <li className="nav-item mb-3">
              <a href="#" className="nav-link p-0 text-body-secondary fw-bold">
                Offline
              </a>
            </li>
          </ul>
        </div>

        <div className="col mb-3">
          <h5 className="mb-3" style={{ opacity: 0.25 }}>
            About
          </h5>
          <ul className="nav flex-column">
            <li className="nav-item mb-3">
              <a href="#" className="nav-link p-0 text-body-secondary fw-bold">
                Our Story
              </a>
            </li>
            <li className="nav-item mb-3">
              <a href="#" className="nav-link p-0 text-body-secondary fw-bold">
                Benefits
              </a>
            </li>
            <li className="nav-item mb-3">
              <a href="#" className="nav-link p-0 text-body-secondary fw-bold">
                Team
              </a>
            </li>
            <li className="nav-item mb-3">
              <a href="#" className="nav-link p-0 text-body-secondary fw-bold">
                Careers
              </a>
            </li>
          </ul>
        </div>

        <div className="col mb-3">
          <h5 style={{ opacity: 0.25 }}>Follow Us!</h5>
          <ul className="nav flex-column">
            <li className="nav-item mb-2">
              <img
                src="images/logo-facebook.png"
                alt="Facebook Logo"
                width="16"
                style={{ margin: "14px", marginLeft: "5px" }}
              />
              Facebook
              <a
                href="#"
                className="nav-link p-0 text-body-secondary fw-semibold"></a>
            </li>
            <li className="nav-item mb-2">
              <img
                src="images/logo-twitter.png"
                alt="Twitter Logo"
                width="23"
                style={{ margin: "11px", marginLeft: "5px" }}
              />
              Twitter
              <a
                href="#"
                className="nav-link p-0 text-body-secondary fw-semibold"></a>
            </li>
            <li className="nav-item mb-2">
              <img
                src="images/logo-instagram.png"
                alt="Instagram Logo"
                width="23"
                style={{ margin: "11px", marginLeft: "5px" }}
              />
              Instagram
              <a
                href="#"
                className="nav-link p-0 text-body-secondary fw-semibold"></a>
            </li>
          </ul>
        </div>
      </footer>
    </div>
  );
}

export default Footer;
