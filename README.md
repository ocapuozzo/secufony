# secufony

Dans le contrôleur utilisateur les lignes suivantes de la méthode new :

            // uniquement pour créer un admin
            $role = ['ROLE_ADMIN'];
            $utilisateur->setRoles($role);
            
sont décommentées pour que chaque utilisateur devienne administrateur à l'inscription.

Autrement dit : on change le code lorsque l'on veut créer un administrateur...
Pour revenir à la création d'utilisateurs classiques, il suffit de les ré-commenter.
