const matches = [
    {
        team1: "India",
        team2: "Australia",
        score: "245/6",
        overs: "42.3",
        status: "India need 56 runs in 45 balls"
    },

    {
        team1: "CSK",
        team2: "MI",
        score: "189/4",
        overs: "20.0",
        status: "CSK won by 18 runs"
    },

    {
        team1: "RCB",
        team2: "KKR",
        score: "120/2",
        overs: "13.1",
        status: "RCB batting"
    }
];

// Container
const container = document.getElementById("liveScores");

// Generate Match Cards
matches.forEach(match => {

    const card = document.createElement("div");
    card.classList.add("match-card");

    card.innerHTML = `
    
        <h2>${match.team1} vs ${match.team2}</h2>

        <div class="score">
            ${match.score}
        </div>

        <div class="overs">
            Overs: ${match.overs}
        </div>

        <div class="status">
            ${match.status}
        </div>

    `;

    container.appendChild(card);

});