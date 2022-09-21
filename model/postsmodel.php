<?php 

class PostsModel extends Model {
    public function getAll(){
        return $this->db->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTextById($id){
        return $this->db->query('SELECT * FROM posts WHERE id=' . $id)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateText($id, $title, $text, $athor){

        // $data = [
        //     'id' => $id,
        //     'title' => $title,
        //     'text' => $text,
        //     'athor' => $athor
        // ];

        // $sql = "UPDATE users SET title=:title, text=:text, athor=:athor WHERE id=:id";
        // $updatedb= $this->db->prepare($sql);
        // $updatedb->execute($data);

        $sql = "UPDATE posts SET title=?, text=?, athor=? WHERE id=?";
        $updatedb= $this->db->prepare($sql);
        $updatedb->execute([$title, $text, $athor, $id]);
    }

    public function deleteTextById($id){
        $sql = "DELETE FROM posts WHERE id=?";
        $stmt= $this->db->prepare($sql);
        $stmt->execute([$id]);
    }

    public function setText($title, $text, $athor){
        $data = [
            'title' => $title,
            'txt' => $text,
            'athor' => $athor
        ];

        // $sql = "INSERT INTO posts SET (title, text, athor) VALUES (:title, :txt, :athor)";
        // $updatedb= $this->db->prepare($sql);
        // $updatedb->execute($data);

        $sql = "INSERT INTO posts SET title=?, text=?, athor=?";
        $updatedb= $this->db->prepare($sql);
        $updatedb->execute([$title, $text, $athor]);

        
    }

    
}

?>