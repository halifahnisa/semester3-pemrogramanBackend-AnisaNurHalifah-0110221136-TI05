// import database
const db = require("../config/database");

// membuat class Student
class Student {
  // solution with promise + async await
  static all() {
    return new Promise((resolve, reject) => {
      const query = "SELECT * FROM students";
      /**
       * Melakukan query meggunakan method query
       * Menerima 2 params: query dan callback
       */
      db.query(sql, (err, results) => {
        resolve(results);
      });
    });
  }

  static async create(data){
    const id = await new Promise((resolve, reject)=>{
      const sql = "INSERT INTO student SET ?";
      db.query(sql, data, (err,results)=>{
        resolve(results);
      });
    });
  
    //melakukan query berdasarkan id
    const student = await this.find(id);
    return student;
} 
  static find (id) { 
    return new Promise((resolve, reject)=>{
      const sql = "SELECT * FROM students WHERE id = ?";
      db.query(sql, id, (err, results)=> {
        //destrucing array
        const[student] = results;
        resolve(student);
      });
    });
}

static async update(id, data) {
  await new Promise((resolve, reject)=>{
    const sql = "UPDATE student SET ? WHERE id = ?";
    db.query(sql,[data, id], (err, results)=>{
    resolve(results);
    });
  });
//mencari data yang baru di update
const student = await this.find(id);
return student;
}

static delete (id){
  return new Promise((results, reject)=>{
    const sql = "DELETE FROM student WHERE id = ?";
    db.query(sql, id, (err, results)=>{
      resolve(results);
    });
  });
} 
}
// export class Student
module.exports = Student;