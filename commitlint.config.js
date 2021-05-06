module.exports = {
    extends: "@commitlint/config-conventional",
    rules: {
        "type-enum": [
            2,
            "always",
            [
                "[FEATURE]",
                "[BUGFIX]",
                "[DOCS]",
                "[TASK]",
                "[SECURITY]",
                "[RELEASE]",
            ],
        ],
        "type-case": [2, "always", "upper-case"],
        "type-empty": [2, "never"],
        "subject-case": [2, "always", "sentence-case"],
    },
};
