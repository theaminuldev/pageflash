module.exports = {
	env: {
		browser: true,
		es6: true,
		node: true,
	},
	extends: ['eslint:recommended', 'plugin:react/recommended'],
	parserOptions: {
		ecmaVersion: 2018,
		sourceType: 'module',
		ecmaFeatures: {
			jsx: true,
		},
	},
	plugins: ['react'],
	rules: {
		// Add your rules here
		'no-undef': 'off',
		'quotes': ['error', 'single'],
		'semi': ['error', 'always'],
		'no-console': 'warn',
		'no-unused-vars': 'warn',
	},
};
