const students = require("../models/students");

class StudentController {
  async index(req, res) {
    const students = await Student.all();
    const data = {
      message: "Menampilkan semua students",
      data: students,
    };

    res.json(data);
  }

  async store(req, res) {
    
    const students = await Student.create(req.body);

    const data = {
      message: `Menambahkan data student`,
      data: students,
    };

    res.json(data);
  };
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = student;