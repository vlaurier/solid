    <?php
    class Command
    {
        // Une commande est destinée à un récepteur
        private $receiver;

        /**
         * @param Receiver $receiver
         */
        public function __construct(Receiver $receiver)
        {
            // Quand on crée la commande, on indique à qui elle est destinée.
            $this->receiver = $receiver;
        }
    }
    
Cette partie là correspond simplement au fait que je prenne un morceau de papier et que je l'adresse à Otto.
la commande a un destinataire, c'est le receveur.
Mais en plus, je vais écrire des instructions dessus, qui correspondent aux actions qu'Otto va devoir executer.
C'est pourquoi sur une commande on trouvera une méthode qui s'appelle execute et qui contient des instructions que le recepteur est censé effectuer.
Pour indiquer ça de façon claire dans le code, déclarons une interface CommandInterface que la classe Command va implémenter,
 et qui indique juste que notre commande doit contenir la méthode execute.
 
    interface CommandInterface
    {
        public function execute();
    } 
    
    class Command implements CommandInterface
    {
        // Une commande est destinée à un récepteur
        private $receiver;
    
        /**
         * @param Receiver $receiver
         */
        public function __construct(Receiver $receiver)
        {
            // Quand on crée la commande, on indique à qui elle est destinée.
            $this->receiver = $receiver;
        }
    
        /**
         * La méthode execute contient toutes les instructions que le récepteur doit exécuter.
         */
        public function execute()
        {
            $this->receiver->findHat();
            $this->receiver->putHatOnSolidHead();
            $this->receiver->saySolidToReturn();        
        }
    }

Gepetto: Dans le Pattern Commande, l'objet Commande c'est donc mon morceau de papier, qui contient:
- le récepteur 
- les instructions à effectuer par le récepteur dans la méthode execute.

Moi je suis le client, parce que c'est moi qui émet la commande. Dans le code, ça pourrait être n'importe quoi.
C'est juste l'endroit dans le code où la demande est initiée.
Mais c'est là que tu as un rôle Solid !

Sans toi, Otto n'aurait pas pu éxécuter les instructions. Tu es celui qui a déclenché l'execution de la commande.
Quand ça ? Quand tu lui a donné la commande évidemment !
C'est pourquoi tu t'appelles l'invocateur. Tu invoques l'execution de la commande par le recepteur.

Dans le code, ça donne:

    class Invoker
    {
        // L'invocateur (Solid dans l'exemple) est porteur de la commande.
        private $command;
    
        /**
         * On peut donner à l'invocateur n'importe quelle commande !
         * D'où l'utilisation de l'interface.
         *
         * @param CommandInterface $command
         */
        public function __construct(CommandInterface $command)
        {
            $this->command = $command;
        }
        
        /**
         * L'invocateur, en effectuant une certaine action déclenche l'execution de la commande.
         */
        public function giveCommandToOtto()
        {
            $this->command->execute();
        }
    } 











