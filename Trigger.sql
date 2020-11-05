
DROP TRIGGER TRG_TBLUSUARIO_AU_LOG;
DROP TRIGGER TRG_TBLIMAGEM_AU_LOG;

DELIMITER // 
CREATE TRIGGER TRG_TBLUSUARIO_AU_LOG 
AFTER UPDATE ON usuario
FOR EACH ROW 
BEGIN 
INSERT INTO tbl_log_usuario(USUARIO,DATA_HORA,ACAO,DADOS) VALUES(CURRENT_USER() ,NOW(),'UPDATE', 
    CONCAT( 
    old.idusuario,'#',
    old.nomeusuario,'#',
    old.email,'#',
    old.senha ,'#',
    old.tipousuario
    )
); 
END//

DELIMITER // 
CREATE TRIGGER TRG_TBLIMAGEM_AU_LOG 
AFTER UPDATE ON imagens
FOR EACH ROW 
BEGIN 
INSERT INTO tbl_log_imagem(USUARIO,DATA_HORA,ACAO,DADOS) VALUES(CURRENT_USER() ,NOW(),'UPDATE', 
    CONCAT( 
    old.idimagem,'#',
    old.idusuario,'#',
    old.caminho,'#',
    old.nomeimagem
    )
); 
END//