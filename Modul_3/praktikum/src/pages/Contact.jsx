import React from "react";
import Navbar from "../componets/Navbar";
import Footer from "../componets/Footer";

function Contact() {
  return (
    <>
      {/* <Navbar /> */}
      <div>
        <div className="about-us" style={{ margin: "120px" }}>
          <h3>Contact Us</h3>
          <p>Address: Jl. Raya Tlogomas No.246, Jawa Timur 65144, Indonesia</p>
          <p>
            Phone: (0341) 464318, ext 252 - SMS/WA/Telegram (Quick Response) +62
            896-896-01317
          </p>
          <p>Email 1 : lab.informatika@umm.ac.id</p>
          <p>Email 2 : lab.informatika.umm@gmail.com</p>
        </div>
      </div>

      <Footer />
    </>
  );
}

export default Contact;
