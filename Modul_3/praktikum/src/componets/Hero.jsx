function Hero() {
  return (
    <div className="card text-bg-dark">
      <img src="images/hero.jpg" className="card-img" alt="" />
      <div className="card-img-overlay">
        <h1
          className="card-text pt-5 fw-semibold"
          style={{
            fontSize: "64px",
            marginLeft: "12rem",
            marginTop: "23rem",
            color: "white",
          }}
          //   style="font-size: 64px; margin-left: 12rem; margin-top: 23rem"
        >
          Selamat Datang
        </h1>
        <p
          className="card-text pb-5"
          style={{ fontSize: "30px", marginLeft: "12rem", color: "white" }}
          //   style=" font-size: 30px; margin-left: 12rem"
        >
          di Website Praktikum Website Informatika
        </p>
      </div>
    </div>
  );
}

export default Hero;
