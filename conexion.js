




var e1,e2,e3,e4,e5,e6,e7; //<-- Variable global
function main() {

var mysql = require('mysql');
var con = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  password: "",
  database: "dbreport",
  //port:23723
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT datos, COUNT(*) as total FROM users WHERE datos=1", function (err, result, fields) {
    if (err) throw err;
    e1 = result[0].total;
    //console.log(result[0].total);
   // console.log((enf1()+enf2()+enf3()+enf4()+enf5()+enf6()+enf7()));
  });
  
  con.query("SELECT datos, COUNT(*) as total FROM users WHERE datos=2", function (err, result, fields) {
    if (err) throw err;
    e2 = result[0].total;
    //console.log(result[0].total);
    //console.log(enf2());
    //console.log(enf1()+enf2());
    
    
  });
  con.query("SELECT datos, COUNT(*) as total FROM users WHERE datos=3", function (err, result, fields) {
    if (err) throw err;
    e3 = result[0].total;
    //console.log(result[0].total);
   // console.log(enf3());
    
  });

  con.query("SELECT datos, COUNT(*) as total FROM users WHERE datos=4", function (err, result, fields) {
    if (err) throw err;
    e4 = result[0].total;
    //console.log(result[0].total);
    //console.log(enf4());
  });

  con.query("SELECT datos, COUNT(*) as total FROM users WHERE datos=5", function (err, result, fields) {
    if (err) throw err;
    e5 = result[0].total;
    //console.log(result[0].total);
    //console.log(enf5());


       
    
  });

  con.query("SELECT datos, COUNT(*) as total FROM users WHERE datos=6", function (err, result, fields) {
    if (err) throw err;
    e6 = result[0].total;
    //console.log(result[0].total);
   // console.log(enf6());

      
    
  });
  con.query("SELECT datos, COUNT(*) as total FROM users WHERE datos=7", function (err, result, fields) {
    if (err) throw err;
    e7= result[0].total;
    //console.log(result[0].total);
   // console.log(enf7());
   //1
  console.log("El porcentaje de personas que  tiene 'Ninguna enfermedad' son "+ enf1()*100/(enf1()+enf2()+enf3()+enf4()+enf5()+enf6()+enf7()));
//2
  console.log("El porcentaje de personas que tiene 'Enfermedad respiratoria' son "+ enf2()*100/(enf1()+enf2()+enf3()+enf4()+enf5()+enf6()+enf7()));
//3
  console.log("El porcentaje de personas que  tiene 'Enfermedad del corazon' son "+ enf3()*100/(enf1()+enf2()+enf3()+enf4()+enf5()+enf6()+enf7()));
//4
  console.log("El porcentaje de personas que tiene 'Sindrome de Bernoulli' son "+ enf4()*100/(enf1()+enf2()+enf3()+enf4()+enf5()+enf6()+enf7()));
//5
  console.log("El porcentaje de personas que tiene 'VIH' son "+ enf5()*100/(enf1()+enf2()+enf3()+enf4()+enf5()+enf6()+enf7()));
//6
  console.log("El porcentaje de personas que tiene 'Hepatitis' son "+ enf6()*100/(enf1()+enf2()+enf3()+enf4()+enf5()+enf6()+enf7()));
//7
  console.log("El porcentaje de personas que tiene 'Diabetes' son "+ enf7()*100/suma());

    con.end();    
    
  });
});


}



function enf1(){
return e1;

//console.log(resultaGlobal)
}


function enf2(){
    return e2;
    
    //console.log(resultaGlobal)
}

function enf3(){
  return e3;
  
  //console.log(resultaGlobal)
  }
function enf4(){
    return e4;
    
    //console.log(resultaGlobal)
    }
function enf5(){
      return e5;
      
      //console.log(resultaGlobal)
      }
function enf6(){
        return e6;
        
        //console.log(resultaGlobal)
        }
const  enf7 = () =>
        {
        return e7;
        
        }


function suma(){
    return enf1()+enf2()+enf3()+enf4()+enf5()+enf6()+enf7();
    
    //console.log(resultaGlobal)
}
    
    

main();

/*
async function main() {
    const mysql = require('mysql');
    const con = mysql.createConnection({
      host: "127.0.0.1",
      user: "root",
      password: "",
      database: "dbreport",
    //port:3306
    });

    const doQuery = (query) => {
        return new Promise((resolve, reject) => {
            con.query(query, (error, results, fields) => {
                if(error) return reject(error);
                console.log('Consulta correcta');
                return resolve(results);
            });
        });
    }

    const doStuffWithResults = (resultados) => {
        console.log(resultados);
        // Aquí haces cosas con los resultados
    }

    const doMoreStuffWithResults = (resultados) => {
        console.log(resultados);
        // Aquí haces más cosas con los resultados
    }

    // declaro mi consulta aquí
    const selectAllQuery = 'SELECT * FROM users';

    // realizo mi consulta aquí y el resultado lo almaceno en una variable
    const results = await doQuery(selectAllQuery);

    // llamamos a nuestros métodos y le pasamos el resultado para realizar tareas
    doStuffWithResults(results);
    doMoreStuffWithResults(results);
}



main();

var mysql = require('mysql');


 
var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'dbreport',
    debug: false,
});
 
console.log("Connected to Mysql");
connection.connect();




var sql = "SELECT datos, COUNT(*) as total FROM users WHERE datos=1";


var query = connection.query(sql, function(err, result) {
 
  // e1[0]=result[0].total;
 console.log("Porcentaje de Ninguna:- " + result[0].total*100/3);
 


});

var sql2 = "SELECT datos, COUNT(*) as total FROM users WHERE datos=2";
var query = connection.query(sql2, function(err, result) {
    //e1[1]=result[0].total;
 console.log("Porcentaje de Respiratoria- " + result[0].total*100/3);

 
});

//console.log(e1[0]);


connection.end();*/