DELIMITER //
create trigger trg_deletemessage
	after delete
	on message
	for each row
begin
	insert into deletemessage
	values (OLD.send_id, OLD.rv_id, OLD.subject,
	OLD.content, OLD.regist_day, curdate());
end
// DELIMITER ;