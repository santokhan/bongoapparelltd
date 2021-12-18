<?php

use Database as GlobalDatabase;

class Database
{
    private $server = "localhost";
    private $user = "u416541930_santokhan";
    private $pass = "Santo@5426";
    private $db = "u416541930_bongoapparel";
    private $table = 'subscriber';

    /** Default status for $conn */
    private $conn = false;
    private $config = '';

    /** Store error and output */
    private $output = array();


    /** Create connection */
    function __construct()
    {
        if (!$this->conn) {
            /** If connection is not set */
            $this->config = new mysqli($this->server, $this->user, $this->pass, $this->db);

            if ($this->config->connect_error) {
                echo $this->config->connect_error . '<br>';
            }

            $this->conn = TRUE;
        } else {
            array_push($this->output, "Database already connected." . __LINE__);
            return false;
        }
    }

    public function insert($email)
    {
        if (is_string($email)) {
            $sql = "INSERT INTO $this->table(email) VALUES('$email')";

            if ($this->config->query($sql)) {
                array_push($this->output, "Data inserted." . __LINE__);
            } else {
                echo $this->config->error;
            }
        } else {
            array_push($this->output, "Email is empty" . __LINE__);
        }
    }

    public function read()
    {
        /** Store all fetch data to this $data Array */
        $data = array();

        $sql = "SELECT * FROM {$this->table}";

        $result = $this->config->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($data, $row);
            }
            /**print json data */
            $json = json_encode($data);
            echo $json;
        } else {
            array_push($this->output, "Can not fetch data." . __LINE__);
        }
    }

    /** Print errors and output */
    public function print_output()
    {
        echo '<pre>';
        print_r($this->output);
        echo '</pre>';
    }

    public function __destruct()
    {
        if ($this->conn) {
            /** If connection is set */
            $this->config->close();
            array_push($this->output, "Connection closed.");
        } else {
            return false;
        }
    }
}


/** add name subscriber_email in form input field */
function postEmail()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST[''])) {
            # code...
        }
        $mail = $_POST['subscriber_email'];

        if (is_string($mail) === true && strlen($mail) > 10) {
            $database = new Database();
            $database->insert($mail);
            sub_status(true);

            // $database->read();
            // $database->print_output();
        } else {
            return false;
        }
    } else {
        return false;
    }
}
postEmail();


function sub_status($status = false)
{
    if ($status) {
        return 'Subscribe';
    } else {
        return 'Subscribed';
    }
}
?>

<div class="container py-3 py-md-5">
    <div class="row justify-content-center px-3">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 d-flex flex-column align-items-center py-3 bg-white" style="border-radius: 1.5rem">
            <img class="py-3 py-md-4" src="assets/img/envelope.webp" alt="envelope" width="120">
            <div class="h3 pt-md-4 text-uppercase" id="subscribeStatus"><?= sub_status() ?></div>
            <div class="text-center">Subscribe to our newsletter and stay updated</div>

            <form class="d-flex flex-column flex-md-row pt-3 pb-3 pb-md-4 d-flex" id="subscribeForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                enctype="multipart/form-data">
                <input type="email" name="subscriber_email" class="form-control rounded-pill mx-1 px-3" id="subscribeEmail" placeholder="Enter email to"
                    pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                <div class="d-flex justify-content-center justify-content-md-start pt-2 pt-md-0">
                    <button type="submit" class="btn btn-danger rounded-pill mx-1 px-4 text-capitalize" id="subscribeBtn"><?= sub_status() ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
</script>