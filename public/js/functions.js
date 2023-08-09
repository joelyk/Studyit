var txt = [
    "Cette méthode est utilisée pour donner aux séminaristes les éléments leur permettant d’aborder la phase de pédagogie active qui doit suivre.",
    "Ces exercices de mise en pratique de situations relationnelles permettent des prises de conscience ou constituent des entraînements aux techniques d'entretien, que ce soit sur le plan commercial, managérial ou sur le plan des simples relations inter-individuelles. Les rôles se partagent entre les \"protagonistes\" (généralement au nombre de deux) et les observateurs (généralement le reste du groupe). Les observateurs ont un rôle extrêmement actif car l'animateur leur confie des tâches précises d'observation les exerçant à l'analyse des situations vécues. Des permutations permettent à chacun de bénéficier de l'ensemble des acquisitions.Ces exercices peuvent être filmés en vidéo et exploités immédiatement après si les circonstances et le temps le permettent.",
    "Cette méthode consiste à questionner le groupe, de façon +/- ludique, de manière à provoquer une réflexion des participants à partir de leur expérience professionnelle et de les aider à créer leur propre système de représentation de la réalité.",
    "Par cette méthode, l’animateur amène chaque participant à s’interroger sur ses propres pratiques et introduit une distanciation par rapport aux thèmes étudiés.",
    "Ils donnent lieu à des travaux en sous-groupes de trois à quatre personnes. Ce type de travail favorise les échanges d'expériences entre les membres du groupe.",
    "",
    "",
    "",
    "",
    "",
    ""
];

function changeTxt1(id) {
    const paper = document.querySelector('#txt');

    paper.innerHTML=txt[id];
    console.log(txt);
}
