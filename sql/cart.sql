create table cart(
  num int not null auto_increment,
  modelnum int not null,
  userid char(15),
  color char(20),
  primary key(num)
  )