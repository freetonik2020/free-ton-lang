<?php

return [
    "deploying" => implode("\n", [
        "Deploying new TON Surf compatible wallet...",
    ]),

    "deployed" => implode("\n", [
        "New wallet successfully deployed.",
    ]),

    "received" => implode("\n", [
        "Transaction received:",
        "💎 :amount TON",
        "💲 :usd_amount USD",
        "To check your balance run /balance",
    ]),

    "sent" => implode("\n", [
        "Transaction sent:",
        "💎 :amount TON",
        "💲 :usd_amount USD",
    ]),

    "transfer_from_giver_failed" => "Transfer failed. Please try again.",
];
