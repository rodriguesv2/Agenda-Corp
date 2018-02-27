<?php
class UsuarioDao{
    
    function buscarUsuario($conexao,$usuario){
        $query = "select email from usuario where email = '{$usuario->getEmail()}' and senha = '{$usuario->getSenha()}' limit 1";
        $resultado = mysqli_query($conexao, $query);
        
        $usuarioResult = mysqli_fetch_assoc($resultado);
        
        return $usuarioResult['email'];
    }
}
?>