<?PHP
	class Reclamation{
		private $id_reclamation = null;
		private $date_reclamation = null;
		private $objet_reclamation = null;
		private $description = null;
		
		
		function __construct( $date_reclamation, $objet_reclamation, $description){
			
			
			
			$this->date_reclamation=$date_reclamation;
			$this->objet_reclamation=$objet_reclamation;
			$this->description=$description;
			
		}
		
		function getId_reclamation()
		{
		return $this->id_reclamation ;
		}
		function getDate_reclamation()
		 {
			 return $this->date_reclamation;
		}
		function getObjet_reclamation()
		 {
			return $this->objet_reclamation;
		}
		function getDescription() 
		{
			 return $this->description;
		}
		

		
		
		
		function setDate_reclamation($date_reclamation)
		{
			$this->date_reclamation=$date_reclamation;
		}
		function setObjet_reclamation($objet_reclamation) 
		{
			$this->objet_reclamation=$objet_reclamation;
		}
		function setDescription($description) 
		{
			$this->description=$description;
		}
		
	}
?>