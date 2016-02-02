# 01 - Controller
Le controlleur nous permet de créé un pont entre le model et la vue. C'est également le point d'entrée de toutes les URls appelées.

# 02 - Controller
BeforeFilter, AfterFilter, BeforeRender
Dans l'exemple, plutot que de définir $this->layout = 'mobile'; dans toutes les actions, il vaudra mieux le définir dans un beforeFilter pour que toutes les actions en hérite

# 03 - View
Le template utilise le helper $Form. Or celui-ci n'est pas défini dans les helpers du Controller. Il y aura donc une erreur.