import React from "react";
import Navbar from "../componets/Navbar";
import Footer from "../componets/Footer";

function About() {
  return (
    <>
      {/* <Navbar /> */}
      <div>
        <div className="about-us" style={{ margin: "120px" }}>
          <h3>About Us</h3>
          <p>
            i-Lab is an integrated system that can support practicum activities
            in the Department of Informatics at the University of Muhammadiyah
            Malang, both for practitioners, lecturers and assistants.
          </p>
          <p>
            i-Lab is the work of students of the University of Muhammadiyah
            Malang and has been around since 2012 and has gone through many
            changes since then
          </p>
          <p>
            <em>
              i-Lab merupakan sistem terintegrasi yang dapat menunjang kegiatan
              praktikum jurusan Informatika Universitas Muhammadiyah Malang,
              baik untuk praktikan, dosen maupun asisten.
            </em>
          </p>
          <p>
            <em>
              i-Lab merupakan karya mahasiswa Universitas Muhammadiyah Malang
              dan sudah ada sejak tahun 2012 dan sudah banyak melalui perubahan
              sejak saat itu
            </em>
          </p>
        </div>
      </div>

      <Footer />
    </>
  );
}

export default About;
