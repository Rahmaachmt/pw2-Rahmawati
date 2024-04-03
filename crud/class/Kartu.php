<?php
    class kartu {
        private $conn;
        private $table_name = "kartu";

        public $id;
        public $kode;
        public $nama;
        public $iuran;
        public $diskon;

        public function __construct($db){
            $this->conn = $db;
        }

        // Tampilkan data semua kartu
        public function index(){
            $query = "SELECT * FROM {$this->table_name}";
            $data = $this->conn->prepare($query);
            $data->execute();
            return $data;
        }

        // Tampilkan halaman create
        public function create(){
            header("Location: create.php");
            exit();
        }

        // Tambah kartu ke database
        public function store(){
            $query = "INSERT INTO {$this->table_name} 
                    (kode, nama, iuran, diskon) 
                    VALUES (?, ?, ?, ?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->kode,
                $this->nama,
                $this->iuran,
                $this->diskon,
            ]);
        
            return $data->rowCount() > 0;
        }

        // Tampilkan halaman edit
        public function edit(){
            $query = "SELECT * FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
            return $data;
        }

        // Update kartu ke database
        public function update(){
            $query = "UPDATE {$this->table_name} 
                    SET kode=?, nama=?, iuran=?, diskon=?
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([ 
                $this->kode,
                $this->nama,
                $this->iuran,
                $this->diskon,

            ]);
        
            return $data->rowCount() > 0;
        }

        // Hapus kartu dari database
        public function delete(){
            $query = "DELETE FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
        
            return $data->rowCount() > 0;
        }
    }
?>