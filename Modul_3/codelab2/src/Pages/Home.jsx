import React from "react";
import Navbar from "../components/Navbar";
import Footer from "../components/Footer";
import Hero from "../components/Hero";

function Home() {
  return (
    <div>
      <Navbar />
      <Hero />
      <p>Halaman Home</p>
      <Footer />
    </div>
  );
}

export default Home;
