const Student = require("../models/Student");
const students = require("../models/students");

class StudentController {
  async index(req, res) {
    const students = await Student.all();
    //jika data array lebih dari 0
    if(students.length > 0){
      const data = {
        message: "Menampilkan semua students",
        data: students,
      };
      return res.status(200).json(data);
    }
    //else
      const data = {
        message: "Student is empty",
        data: students,
      };
      return res.status(200).json(data);
    };
  

  async store(req, res) {
    //validasi sederhana 
    //menghendle jika salah satu data tidak dikirim 
    //destruction object req.body
    const { nama, nim, email, jurusan } =req.body;
    //jika data undefined maka kirim response error
    if(!nama || !nim || !email || !jurusan){
      const data = {
        message: "Semua data harus dikirim"
      }
      return res.status(422).json(data);
    } 
    const students = await Student.create(req.body);
    const data = {
      message: `Menambahkan data student`,
      data: students,
    };

    return res.status(200).json(data);
  }


async update(req, res) {
  const { id } = req.params;
  const student = await Student.find(id);

  if(student){
    // melakukan update data
    const student = await Student.update(id, req.body);
    const data = {
      message: `Mengedit data students`,
      data: student,
    };
    res.status(200).json(data);
  }
  else{
    const data = {
      message:`Student not found`,
    };
    res.status(404).json(data);
  }
}

async destroy(req, res) {
    const { id } = req.params;
    const student = await Student.find(id);
  
    if(student){
      await Student.delete(id);
      const data = {
        message: `Menghapus data students`,
      };
      res.status(200).json(data);
    }else{
      const data = {
        message:`Student not found`,
      };
      res.status(404).json(data);
    }
  }

  async show(req, res){
    const { id } = req.params;
    const student = await Student.find(id);
  
    if(student){
      const data = {
        message: `Menampilkan detail data students`,
        data: student,
      };
      res.status(200).json(data);
    }else{
    const data = {
      message:`Student not found`,
    };
    res.status(404).json(data);
    }
  }
}
// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;