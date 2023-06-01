CREATE OR REPLACE VIEW v_produit_stock AS
SELECT 
p.*, t.type, s.quantite, s.dateentree
FROM
produit p JOIN stock s ON p.idproduit = s.idproduit
JOIN type t ON p.idtype = t.idtype;
