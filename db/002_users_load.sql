USE default_db;

START TRANSACTION;


INSERT INTO default_db.users ( name, email, password, born_at, description, created_at, updated_at) VALUES ('Jhon Smith', 'js@example.com', '12345', '2016-07-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2019-07-22 01:27:45', '2019-07-22 01:27:48');
INSERT INTO default_db.users ( name, email, password, born_at, description, created_at, updated_at) VALUES ('Johana Dark', 'jd@example.com', '12345', '2019-07-01', 'Fusce malesuada, dui sed auctor laoreet, dui purus efficitur risus, vitae vestibulum lacus dui sit amet nisl.', '2019-07-22 01:27:47', '2019-07-22 01:27:49');

COMMIT;
