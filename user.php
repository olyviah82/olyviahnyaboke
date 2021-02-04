<?php
interface Account
{
    public function register($pdo);
    public function login($pdo);
    // public function changePassword($pdo);
    //public function logout($pdo);
}

class User implements Account
{
    //properties

    protected $email;
    protected $fullname;
    protected $city;
    protected $password;
    protected $pic;


    //class constructor
    function _construct($email, $pass)
    {
        $this->email = $email;
        $this->password = $pass;
    }
    public function setFullName($fname)
    {
        $this->fullname = $fname;
    }
    public function getFullName()
    {
        return $this->fullname;
    }

    public function setEmailAddress($emailad)
    {
        $this->email = $emailad;
    }
    public function getEmailAddress()
    {
        return $this->email;
    }
    public function setCity($cityres)
    {
        $this->city = $cityres;
    }
    public function getCityResidence()
    {
        return $this->city;
    }
    public function setProfilepic($dp)
    {
        $this->pic = $dp;
    }
    public function getProfilePicture()
    {
        return $this->pic;
    }
    /**        * Create a new user       
     *  * @param Object PDO Database connection handle      
     *   * @return String success or failure message        */
    public function register($pdo)
    {
        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);
        try {
            $stmt = $pdo->prepare('INSERT INTO user (fullname,email,city,password) VALUES(?,?,?,?)');
            $stmt->execute([
                $this->getFullName(),
                $this->email,
                $this->getCityResidence(),
                $passwordHash
            ]);
            return
                "Registration was successuful";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function login($pdo)
    {
        try {
            $stmt = $pdo->prepare("SELECT password FROM user WHERE email=?");
            $stmt->execute([$this->email]);
            $row = $stmt->fetch();
            if ($row == null) {
                return "This account does not exist";
                if (password_verify($this->password, $row["password"])) {
                    return "Login Successful";
                }
                return "username or password incorrect";
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function changePassword($pdo)
    {
        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);
        try {
            $stmt = $pdo->prepare("SELECT * FROM USER WHERE email=?");
            $stmt->execute([$this->email]);
            $row = $stmt->fetch();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}