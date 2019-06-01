CREATE OR REPLACE FUNCTION ValidaUsuario (VARCHAR(50), VARCHAR(50))
RETURNS INTEGER AS $$
declare tSenha varchar(50);
declare tUser varchar(50); 
BEGIN
	select login, senha from usuario where login = $1 and senha = MD5($2) into tUser, tSenha;
	if tUser = $1 and tSenha = MD5($2) then
		return 1;
	else
		return 0;
	end if;
END;
$$ LANGUAGE plpgsql;


ALTER TABLE public.usuario
    ALTER COLUMN senha TYPE character varying (100) COLLATE pg_catalog."default";
	
insert into usuario values(1, 'Adminsitrador', 0, 'adm', MD5('admin'));

