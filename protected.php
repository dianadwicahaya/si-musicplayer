<?php

class Mahasiswa {

    protected string $nim = "17021000"; // Changed access modifier to protected . yang tadinya private jadi protected
    protected string $nama = "Kiki";

}

class Nilai extends Mahasiswa {

    public function getNim() {
        return $this->nim; 
    }

    public function getNama() {
        return $this->nama; 
    }
}

$mhsw = new Nilai();

echo "<p>" . $mhsw->getNim() . "</p>"; 
echo "<p>" . $mhsw->getNama() . "</p>"; 
?>
