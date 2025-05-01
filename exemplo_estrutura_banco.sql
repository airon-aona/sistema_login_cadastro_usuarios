-- phpMyAdmin SQL Dump (sanitizado)
-- Apenas estrutura de exemplo - seguro para repositórios públicos

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Banco de dados fictício (opcional, pode remover)
-- CREATE DATABASE IF NOT EXISTS `exemplo_db`;
-- USE `exemplo_db`;

-- Estrutura da tabela `usuarios` (sem dados reais)
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exemplo opcional de dados fictícios (com senha dummy)
INSERT INTO `usuarios` (`id`, `username`, `email`, `senha`) VALUES
(1, 'usuario_exemplo', 'email@exemplo.com', '$2y$15$fakesaltplaceholderhashhashhashhash');

-- Índices
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

-- Auto-incremento
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

COMMIT;
