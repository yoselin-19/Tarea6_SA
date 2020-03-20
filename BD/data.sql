CREATE DATABASE IF NOT EXISTS Tarea;
use Tarea;

CREATE TABLE actor (
  pais VARCHAR(20),
  nombre VARCHAR(20)
);

INSERT INTO actor
  (pais, nombre)
VALUES
  ('Pais 1', 'Actor 1'),
  ('Pais 2', 'Actor 2'),
  ('Pais 3', 'Actor 3'),
  ('Pais 4', 'Actor 4'),
  ('Pais 5', 'Actor 5'),
  ('Pais 6', 'Actor 6');
