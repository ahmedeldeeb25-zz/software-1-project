<?php

class user {

////////////Login method/////////////////////////
	private $conn;
	
	public function __construct(){
		
		$servername = "localhost";
        $username = "zizo";
        $password = "123";
        $dbname = "hospital";
		
		$this->conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
		
	}
    public function login($date) {

        $user = $date['name'];
        $pass = $date['pass'];
		
        $sql = "SELECT * FROM users WHERE username ='" . $user . "' AND password ='" . $pass . "'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['username'] = strtoupper($row["username"]);
                $_SESSION['userID'] = $row["id"];
            }

            $_SESSION['is_logged_in'] = true;

            redirect('index.php', $_SESSION['username'], "suc");
        } else {

            redirect('index.php', "You entered invalid user", "error");
        }
        $this->conn->close();
    }

//////////////////////////////////////////////////
////////////LogOut /////////////////////////////
    public function do_logout() {

        // remove all session variables
        session_unset();

        redirect('index.php', "See You", "suc");
    }

/////////////////Contact US///////////////////////
    public function contact_us($date) {

        // prepare and bind
        $stmt = $this->conn->prepare("INSERT INTO messages (name, phone, email,message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $firstname, $lastname, $email, $text);

        // set parameters and execute/
        $firstname = $date['name'];
        $lastname = $date['phone'];
        $email = $date['mail'];
        $text = $date['message'];
        $stmt->execute();





        $stmt->close();
        $this->conn->close();
    }

    public function register($data) {

        $stmt = $this->conn->prepare("insert into users (first_name,last_name,email,username,password,phone,Gender) 
                values (?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssis", $first_name, $last_name, $email, $user_name, $password, $phone,$gender);

        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $user_name = $data['user_name'];
        $password = $data['password'];
        $phone = $data['phone'];
        $gender = $data['gender'];

        $date['name'] = $user_name;
        $date['pass'] = $password;
        $stmt->execute();

        $this->login($date);


        $stmt->close();
        $this->conn->close();
    }

    public function leave_comment($data) {

        
        $stmt = $this->conn->prepare("INSERT INTO replies (question_id,user_id, body) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $qu_id, $user_id, $body);

        // set parameters and execute/
        $body = $data['message'];
        $qu_id = $_SESSION['question_id'];
        $user_id = $_SESSION['userID'];

        $stmt->execute();

        $stmt->close();
        $this->conn->close();
    }

    public function ask($title,$dept,$text) {
       
        $stmt = $this->conn->prepare("insert into question (username,title,dept,text) values (?,?,?,?)");
        $stmt->bind_param("ssss", $_SESSION['username'], $title,$dept, $text);

        $stmt->execute();

        $stmt->close();
        $this->conn->close();
    }

}

?>