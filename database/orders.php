<?php

function createOrder($username, $idspecas, $quantidades, $preco) {
    global $conn;
    $time=time();
        $datapagamento=date('Y-m-d H:i:s',$time );
        $dataestimadaentrega=date('Y-m-d',$time + (15 * 24 * 60 * 60));

    $stmt = $conn->prepare("INSERT INTO encomendas (username, datapagamento, dataestimadaentrega, idspecas, quantidades, preco) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($username, $datapagamento, $dataestimadaentrega, $idspecas, $quantidades, $preco));
}

function getOrdersFromUser($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM encomendas
                            WHERE username = ? ");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
}

?>