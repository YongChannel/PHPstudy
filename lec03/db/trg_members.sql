DELIMITER //
create trigger trg_deletemembers
	after delete
	on members
	for each row
begin
	insert into deletemembers
	values (OLD.id, OLD.pass, OLD.name,
	OLD.email, OLD.level, OLD.point, curdate());
end
// DELIMITER ;