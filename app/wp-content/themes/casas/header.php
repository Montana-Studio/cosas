<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon_casas.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<div class="menuCasas menuMobile">

						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<svg viewBox="0 0 751.333 195.333">
									<path fill="#B20C15" d="M107.198,7.861H80.828c-35.168,0-75.664,27.001-75.664,75.358c0,48.345,40.496,75.339,75.664,75.339h26.371
										v-26.371H85.849c-26.06,0-51.792-16.966-51.792-48.968c0-32.023,25.733-48.98,51.792-48.98h21.349V7.861z M272.634,158.559V76.307
										c0-43.328-29.5-71.568-75.982-71.568c-48.344,0-77.845,33.886-77.845,76.926c0,44.249,30.762,80.031,74.084,80.031
										c19.168,0,29.843-6.268,40.814-14.45v-32.639c-9.414,11.929-22.284,20.719-37.988,20.719c-28.878,0-49.292-23.536-49.292-51.482
										c0-28.558,19.153-52.733,49.604-52.733c25.117,0,48.981,14.436,48.981,42.698v84.751H272.634z M290.854,158.559h77.222
										c26.698,0,46.786-13.508,46.786-42.06c0-54.005-95.129-43.018-95.129-69.069c0.652-9.429,4.391-13.191,17.891-13.191h69.693V7.861
										h-64.959c-32.988,0-51.504,14.146-51.504,40.83c0,52.112,95.129,41.436,95.129,69.054c0,9.427-5.006,14.442-17.907,14.442h-77.222
										V158.559z M580.314,158.559V76.307c0-43.328-29.518-71.568-75.984-71.568c-48.342,0-77.859,33.886-77.859,76.926
										c0,44.249,30.778,80.031,74.1,80.031c19.138,0,29.827-6.268,40.815-14.45v-32.639c-9.414,11.929-22.299,20.719-38.003,20.719
										c-28.879,0-49.278-23.536-49.278-51.482c0-28.558,19.16-52.733,49.612-52.733c25.11,0,48.965,14.436,48.965,42.698v84.751H580.314z
										 M598.518,158.559h77.219c26.708,0,46.787-13.508,46.787-42.06c0-54.005-95.129-43.018-95.129-69.069
										c0.638-9.429,4.406-13.191,17.908-13.191h69.677V7.861h-64.974c-32.975,0-51.488,14.146-51.488,40.83
										c0,52.112,95.127,41.436,95.127,69.054c0,9.427-5.02,14.442-17.908,14.442h-77.219V158.559z"/>
									<path fill="#B20C15" d="M23.906,181.952l1.619,4.057h2.082l-5.182-12.961h-2.332l-5.151,12.961h2.006l1.573-4.057H23.906z
										 M18.922,180.63l1.498-3.752c0.296-0.776,0.539-1.598,0.744-2.342h0.061c0.22,0.744,0.44,1.535,0.767,2.371l1.504,3.723H18.922z
										 M39.725,186.009h1.961v-5.593h1.838c1.794,0.047,2.614,0.715,3.07,2.508c0.403,1.61,0.745,2.719,0.996,3.085h2.021
										c-0.295-0.485-0.638-1.732-1.155-3.57c-0.372-1.323-1.071-2.251-2.225-2.599v-0.062c1.573-0.456,2.849-1.58,2.849-3.282
										c0-1.018-0.433-1.898-1.178-2.477c-0.95-0.698-2.325-1.062-4.421-1.062c-1.307,0-2.759,0.105-3.754,0.305V186.009z M41.685,174.431
										c0.342-0.076,0.996-0.168,1.93-0.168c2.089,0,3.502,0.745,3.502,2.416c0,1.458-1.337,2.447-3.419,2.447h-2.013V174.431z
										 M74.864,186.51c-1.292-0.183-2.926-0.501-4.437-0.835v-0.076c2.521-0.76,4.323-2.873,4.323-6.2c0-3.828-2.675-6.533-6.816-6.533
										c-4.103,0-7.027,2.657-7.027,6.792c0,4.192,3.047,6.442,6.67,6.563c0.281,0,0.578,0.106,0.904,0.198
										c1.778,0.515,3.769,1.032,5.82,1.504L74.864,186.51z M67.798,184.854c-3.101,0-4.839-2.477-4.839-5.228
										c0-2.81,1.632-5.408,4.93-5.408c3.206,0,4.795,2.66,4.795,5.271c0,2.933-1.755,5.364-4.87,5.364H67.798z M87.156,173.048v7.643
										c0,4.024,2.347,5.529,5.44,5.529c3.305,0,5.744-1.61,5.744-5.591v-7.582h-1.991v7.704c0,2.84-1.443,4.102-3.685,4.102
										c-2.014,0-3.518-1.216-3.518-4.102v-7.704H87.156z M111.613,186.009h1.96v-12.961h-1.96V186.009z M129.771,186.009h1.99v-11.534
										h4.626v-1.427h-11.221v1.427h4.604V186.009z M155.8,178.532h-5.88v-4.058h6.237v-1.427h-8.197v12.961h8.531v-1.398h-6.571v-4.665
										h5.88V178.532z M179.11,184.276c-0.774,0.318-1.99,0.533-3.206,0.533c-3.669,0-5.797-2.037-5.797-5.213
										c0-3.403,2.379-5.334,5.911-5.334c1.261,0,2.318,0.212,3.032,0.517l0.501-1.367c-0.532-0.213-1.747-0.547-3.608-0.547
										c-4.703,0-7.909,2.705-7.909,6.775c0,4.27,3.191,6.58,7.468,6.58c1.839,0,3.312-0.303,3.997-0.622L179.11,184.276z M194.754,186.009
										h1.96v-11.534h4.634v-1.427h-11.221v1.427h4.627V186.009z M212.925,173.048v7.643c0,4.024,2.333,5.529,5.425,5.529
										c3.282,0,5.744-1.61,5.744-5.591v-7.582h-1.976v7.704c0,2.84-1.459,4.102-3.685,4.102c-2.029,0-3.533-1.216-3.533-4.102v-7.704
										H212.925z M237.382,186.009h1.945v-5.593h1.854c1.77,0.047,2.613,0.715,3.061,2.508c0.411,1.61,0.753,2.719,0.996,3.085h2.013
										c-0.296-0.485-0.638-1.732-1.155-3.57c-0.372-1.323-1.07-2.251-2.21-2.599v-0.062c1.573-0.456,2.849-1.58,2.849-3.282
										c0-1.018-0.447-1.898-1.199-2.477c-0.935-0.698-2.303-1.062-4.385-1.062c-1.337,0-2.788,0.105-3.769,0.305V186.009z
										 M239.328,174.431c0.357-0.076,1.011-0.168,1.945-0.168c2.066,0,3.488,0.745,3.488,2.416c0,1.458-1.308,2.447-3.412,2.447h-2.021
										V174.431z M267.301,181.952l1.619,4.057h2.119l-5.181-12.961h-2.364l-5.15,12.961h2.021l1.572-4.057H267.301z M262.341,180.63
										l1.495-3.752c0.281-0.776,0.525-1.598,0.73-2.342h0.076c0.221,0.744,0.455,1.535,0.767,2.371l1.489,3.723H262.341z M299.264,181.42
										c1.308,0,2.363-0.895,2.363-2.021c0-1.124-1.056-2.006-2.363-2.006c-1.291,0-2.377,0.896-2.362,2.006
										c0,1.14,1.071,2.021,2.348,2.021H299.264z M328.69,185.963c1.011,0.122,2.158,0.167,3.578,0.167c2.94,0,5.273-0.654,6.716-1.854
										c1.407-1.2,2.181-2.917,2.181-5.045c0-2.113-0.773-3.617-2.143-4.666c-1.344-1.062-3.349-1.609-6.161-1.609
										c-1.542,0-2.979,0.105-4.171,0.288V185.963z M330.68,174.475c0.493-0.12,1.277-0.182,2.271-0.182c4.142,0,6.176,1.9,6.146,4.984
										c0,3.495-2.271,5.532-6.457,5.516c-0.745,0-1.48,0-1.961-0.092V174.475z M353.549,186.009h1.997v-12.961h-1.997V186.009z
										 M368.084,185.37c0.813,0.456,2.417,0.851,3.859,0.851c3.579,0,5.31-1.745,5.31-3.753c0-1.899-1.291-2.933-3.859-3.798
										c-2.088-0.684-3.009-1.277-3.009-2.493c0-0.896,0.784-1.945,2.85-1.945c1.368,0,2.386,0.366,2.851,0.623l0.545-1.366
										c-0.652-0.334-1.809-0.623-3.334-0.623c-2.94,0-4.901,1.489-4.901,3.509c0,1.809,1.527,2.903,4.004,3.678
										c2.054,0.653,2.856,1.368,2.856,2.567c0,1.307-1.16,2.204-3.152,2.204c-1.36,0-2.614-0.38-3.486-0.852L368.084,185.37z
										 M397.669,178.532h-5.888v-4.058h6.23v-1.427h-8.205v12.961h8.562v-1.398h-6.587v-4.665h5.888V178.532z M412.65,186.009v-5.517
										c0-2.156-0.029-3.737-0.158-5.364l0.083-0.015c0.743,1.398,1.77,2.889,2.797,4.331l4.823,6.564h1.961v-12.961h-1.824v5.439
										c0,2.005,0.039,3.586,0.22,5.317l-0.075,0.016c-0.685-1.353-1.587-2.689-2.675-4.209l-4.854-6.563h-2.165v12.961H412.65z
										 M414.938,172.272c0.06-0.531,0.235-0.865,0.577-0.865c0.372,0,0.668,0.197,1.101,0.38c0.487,0.228,0.875,0.351,1.367,0.351
										c1.042,0,1.544-0.624,1.527-1.794h-1.025c-0.047,0.652-0.267,0.759-0.638,0.759c-0.357,0-0.715-0.136-1.08-0.334
										c-0.478-0.243-0.866-0.395-1.396-0.395c-0.919,0-1.489,0.761-1.429,1.899H414.938z M441.437,186.221
										c3.821,0,6.998-2.371,6.998-6.822c0-3.844-2.674-6.533-6.829-6.533c-4.043,0-7.021,2.673-7.021,6.775c0,3.936,2.789,6.58,6.816,6.58
										H441.437z M441.483,184.854c-3.1,0-4.841-2.523-4.841-5.242c0-2.795,1.604-5.394,4.887-5.394c3.252,0,4.824,2.689,4.824,5.271
										c0,2.933-1.763,5.364-4.854,5.364H441.483z M476.987,181.42c1.322,0,2.37-0.895,2.37-2.021c0-1.124-1.048-2.006-2.37-2.006
										c-1.292,0-2.379,0.896-2.362,2.006c0,1.14,1.07,2.021,2.347,2.021H476.987z M506.413,185.963c1.011,0.122,2.164,0.167,3.577,0.167
										c2.956,0,5.273-0.654,6.725-1.854c1.382-1.2,2.196-2.917,2.196-5.045c0-2.113-0.814-3.617-2.167-4.666
										c-1.321-1.062-3.326-1.609-6.146-1.609c-1.557,0-2.97,0.105-4.186,0.288V185.963z M508.372,174.475
										c0.548-0.12,1.291-0.182,2.303-0.182c4.156,0,6.177,1.9,6.161,4.984c0,3.495-2.286,5.532-6.458,5.516c-0.76,0-1.488,0-2.006-0.092
										V174.475z M539.134,178.532h-5.865v-4.058h6.222v-1.427h-8.197v12.961h8.539v-1.398h-6.563v-4.665h5.865V178.532z M562.459,184.276
										c-0.796,0.318-2.005,0.533-3.237,0.533c-3.638,0-5.789-2.037-5.789-5.213c0-3.403,2.364-5.334,5.927-5.334
										c1.247,0,2.304,0.212,3.04,0.517l0.478-1.367c-0.508-0.213-1.724-0.547-3.594-0.547c-4.694,0-7.901,2.705-7.901,6.775
										c0,4.27,3.191,6.58,7.454,6.58c1.847,0,3.296-0.303,3.995-0.622L562.459,184.276z M580.617,186.221c3.845,0,7.02-2.371,7.02-6.822
										c0-3.844-2.695-6.533-6.852-6.533c-4.057,0-7.013,2.673-7.013,6.775c0,3.936,2.781,6.58,6.8,6.58H580.617z M580.633,184.854
										c-3.071,0-4.81-2.523-4.81-5.242c0-2.795,1.604-5.394,4.854-5.394c3.283,0,4.855,2.689,4.855,5.271c0,2.933-1.756,5.364-4.87,5.364
										H580.633z M600.066,186.009h1.946v-5.593h1.854c1.771,0.047,2.614,0.715,3.048,2.508c0.416,1.61,0.744,2.719,0.995,3.085h2.02
										c-0.274-0.485-0.654-1.732-1.147-3.57c-0.372-1.323-1.072-2.251-2.227-2.599v-0.062c1.588-0.456,2.863-1.58,2.863-3.282
										c0-1.018-0.456-1.898-1.214-2.477c-0.935-0.698-2.304-1.062-4.385-1.062c-1.331,0-2.773,0.105-3.754,0.305V186.009z
										 M602.012,174.431c0.325-0.076,0.994-0.168,1.945-0.168c2.066,0,3.472,0.745,3.472,2.416c0,1.458-1.329,2.447-3.427,2.447h-1.99
										V174.431z M629.987,181.952l1.617,4.057h2.089l-5.15-12.961h-2.386l-5.128,12.961h2.021l1.574-4.057H629.987z M625.025,180.63
										l1.475-3.752c0.296-0.776,0.531-1.598,0.752-2.342h0.045c0.251,0.744,0.464,1.535,0.79,2.371l1.497,3.723H625.025z M655.673,184.276
										c-0.791,0.318-2.007,0.533-3.215,0.533c-3.662,0-5.789-2.037-5.789-5.213c0-3.403,2.348-5.334,5.911-5.334
										c1.262,0,2.302,0.212,3.032,0.517l0.485-1.367c-0.515-0.213-1.731-0.547-3.593-0.547c-4.703,0-7.925,2.705-7.925,6.775
										c0,4.27,3.207,6.58,7.469,6.58c1.854,0,3.297-0.303,4.02-0.622L655.673,184.276z M668.392,186.009h1.989v-12.961h-1.989V186.009z
										 M689.627,186.221c3.845,0,7.021-2.371,7.021-6.822c0-3.844-2.676-6.533-6.831-6.533c-4.065,0-7.035,2.673-7.035,6.775
										c0,3.936,2.818,6.58,6.83,6.58H689.627z M689.687,184.854c-3.092,0-4.854-2.523-4.854-5.242c0-2.795,1.619-5.394,4.886-5.394
										c3.274,0,4.839,2.689,4.839,5.271C694.557,182.422,692.802,184.854,689.687,184.854z M690.888,170.115l-2.113,2.249h1.596
										l2.896-2.249H690.888z M710.929,186.009v-5.517c0-2.156-0.014-3.737-0.12-5.364l0.045-0.015c0.746,1.398,1.771,2.889,2.812,4.331
										l4.81,6.564h1.989v-12.961h-1.829v5.439c0,2.005,0.045,3.586,0.196,5.317l-0.062,0.016c-0.683-1.353-1.603-2.689-2.689-4.209
										l-4.838-6.563h-2.165v12.961H710.929z"/>
									<path fill="#B20C15" d="M735.767,159.675h5.067c2.712,0,3.708-1.55,3.708-3.616c0-2.181-1.08-3.828-3.738-3.828h-5.037v1.337h5.113
										c1.899,0,2.743,0.979,2.743,2.454c0,1.344-0.829,2.354-2.743,2.354h-5.113V159.675z M744.398,148.446h-3.685
										c-1.452,0-2.478,0-3.564,0.09l-0.016-0.044c0.935-0.509,1.914-1.178,2.894-1.884l4.369-3.206v-1.323h-8.631v1.247h3.623
										c1.339,0,2.377-0.046,3.533-0.152l0.016,0.029c-0.905,0.48-1.809,1.057-2.805,1.802l-4.367,3.235v1.437h8.631V148.446z
										 M741.677,134.301l2.721-1.103v-1.367l-8.631,3.434v1.571l8.631,3.442v-1.352l-2.721-1.062V134.301z M740.804,137.605l-2.492-0.997
										c-0.525-0.188-1.072-0.348-1.55-0.485v-0.045c0.478-0.16,1.011-0.295,1.564-0.517l2.478-1.01V137.605z M744.398,126.558v-1.313
										h-3.746v-1.224c0.045-1.186,0.479-1.748,1.678-2.044c1.071-0.26,1.817-0.494,2.068-0.652v-1.34
										c-0.343,0.177-1.162,0.428-2.364,0.754c-0.903,0.242-1.525,0.729-1.762,1.474h-0.03c-0.312-1.025-1.056-1.899-2.188-1.899
										c-0.669,0-1.261,0.31-1.619,0.813c-0.5,0.623-0.736,1.542-0.736,2.926c0,0.902,0.084,1.845,0.19,2.506H744.398z M736.663,125.244
										c-0.046-0.198-0.09-0.654-0.09-1.269c0-1.407,0.485-2.342,1.602-2.342c0.982,0,1.636,0.89,1.636,2.271v1.339H736.663z
										 M739.421,112.973v3.921h-2.727v-4.156h-0.926v5.462h8.631v-5.696h-0.936v4.391h-3.106v-3.921H739.421z M744.398,106.743
										l-8.631-3.623v1.405l4.277,1.709c1.103,0.463,2.21,0.851,3.206,1.131v0.055c-0.996,0.273-2.074,0.652-3.222,1.071l-4.262,1.572
										v1.428l8.631-3.312V106.743z M735.767,101.751h8.631v-1.322h-8.631V101.751z M743.98,98.363c0.296-0.546,0.562-1.619,0.562-2.582
										c0-2.403-1.171-3.519-2.509-3.519c-1.261,0-1.943,0.835-2.537,2.567c-0.448,1.384-0.858,2.005-1.662,2.005
										c-0.595,0-1.309-0.53-1.309-1.914c0-0.919,0.267-1.587,0.434-1.915l-0.92-0.356c-0.196,0.434-0.433,1.2-0.433,2.242
										c0,1.943,1.01,3.251,2.347,3.251c1.218,0,1.962-1.01,2.463-2.66c0.448-1.375,0.935-1.897,1.709-1.897
										c0.889,0,1.482,0.76,1.482,2.111c0,0.889-0.251,1.748-0.577,2.317L743.98,98.363z M744.398,88.243v-1.322h-7.682v-3.092h-0.949
										v7.483h0.949v-3.069H744.398z M741.677,78.306l2.721-1.079v-1.4l-8.631,3.474v1.558l8.631,3.434V82.94l-2.721-1.04V78.306z
										 M740.804,81.633l-2.492-0.994c-0.525-0.205-1.072-0.372-1.55-0.503v-0.045c0.478-0.151,1.011-0.28,1.564-0.509l2.478-0.995V81.633z
										 M744.366,70.587c0.077-0.668,0.094-1.436,0.094-2.378c0-1.969-0.434-3.518-1.224-4.483c-0.813-0.919-1.945-1.452-3.365-1.452
										c-1.384,0-2.41,0.533-3.108,1.438c-0.723,0.88-1.064,2.224-1.064,4.086c0,1.026,0.084,1.977,0.175,2.789H744.366z M736.693,69.28
										c-0.06-0.357-0.106-0.875-0.106-1.542c0-2.751,1.261-4.109,3.328-4.08c2.339,0,3.677,1.496,3.677,4.299c0,0.51,0,0.982-0.068,1.323
										H736.693z M739.421,55.072v3.921h-2.727v-4.156h-0.926v5.479h8.631v-5.708h-0.936v4.385h-3.106v-3.921H739.421z M743.236,42.346
										c0.212,0.525,0.357,1.338,0.357,2.129c0,2.461-1.338,3.889-3.473,3.889c-2.271,0-3.562-1.587-3.562-3.95
										c0-0.837,0.159-1.542,0.358-2.02l-0.921-0.328c-0.136,0.328-0.388,1.132-0.388,2.377c0,3.146,1.839,5.297,4.544,5.297
										c2.849,0,4.392-2.136,4.392-4.985c0-1.231-0.206-2.21-0.411-2.66L743.236,42.346z M744.543,36.543c0-2.57-1.587-4.674-4.543-4.674
										c-2.583,0-4.393,1.779-4.393,4.542c0,2.728,1.81,4.689,4.544,4.689c2.612,0,4.392-1.869,4.392-4.544V36.543z M743.624,36.527
										c0,2.036-1.665,3.221-3.489,3.221c-1.884,0-3.608-1.095-3.608-3.267c0-2.181,1.8-3.222,3.518-3.222c1.96,0,3.579,1.162,3.579,3.237
										V36.527z M743.98,30.395c0.296-0.546,0.562-1.616,0.562-2.598c0-2.378-1.171-3.517-2.509-3.517c-1.261,0-1.943,0.858-2.537,2.552
										c-0.448,1.384-0.858,2.006-1.662,2.006c-0.595,0-1.309-0.51-1.309-1.9c0-0.903,0.267-1.571,0.434-1.899l-0.92-0.357
										c-0.196,0.441-0.433,1.201-0.433,2.227c0,1.96,1.01,3.251,2.347,3.251c1.218,0,1.962-1.009,2.463-2.657
										c0.448-1.369,0.935-1.902,1.709-1.902c0.889,0,1.482,0.784,1.482,2.121c0,0.88-0.251,1.724-0.577,2.316L743.98,30.395z
										 M741.677,16.963l2.721-1.086v-1.383l-8.631,3.457v1.565l8.631,3.428v-1.338l-2.721-1.055V16.963z M740.804,20.283l-2.492-0.98
										c-0.525-0.205-1.072-0.381-1.55-0.517v-0.045c0.478-0.16,1.011-0.296,1.564-0.501l2.478-1.027V20.283z M743.98,13.218
										c0.296-0.548,0.562-1.604,0.562-2.585c0-2.362-1.171-3.532-2.509-3.532c-1.261,0-1.943,0.858-2.537,2.567
										c-0.448,1.383-0.858,2.021-1.662,2.021c-0.595,0-1.309-0.524-1.309-1.914c0-0.897,0.267-1.588,0.434-1.899l-0.92-0.372
										c-0.196,0.455-0.433,1.201-0.433,2.241c0,1.96,1.01,3.252,2.347,3.252c1.218,0,1.962-1.012,2.463-2.66
										c0.448-1.367,0.935-1.915,1.709-1.915c0.889,0,1.482,0.799,1.482,2.135c0,0.882-0.251,1.726-0.577,2.317L743.98,13.218z"/>
									<path fill="#B20C15" d="M740.143,174.582c-3.358,0-6.078,2.689-6.078,6.094c0,3.479,2.72,6.169,6.078,6.169
										c3.381,0,6.025-2.69,6.025-6.169c0-3.405-2.645-6.094-5.988-6.094H740.143z M740.18,175.509c2.705,0,4.901,2.31,4.901,5.196
										s-2.196,5.213-4.901,5.166c-2.741,0-4.954-2.279-4.954-5.195c0-2.857,2.213-5.167,4.917-5.167H740.18z M738.996,181.315h0.759
										c0.859,0,1.309,0.317,1.468,1.183c0.152,0.913,0.297,1.536,0.464,1.765h1.153c-0.112-0.229-0.266-0.608-0.455-1.703
										c-0.122-1.003-0.523-1.549-1.132-1.656v-0.061c0.729-0.212,1.337-0.744,1.337-1.657c0-0.668-0.235-1.108-0.623-1.428
										c-0.403-0.288-1.086-0.516-2.137-0.516c-0.819,0-1.352,0.09-1.92,0.182v6.839h1.086V181.315z M738.996,178.137
										c0.197-0.015,0.433-0.044,0.775-0.044c1.247,0,1.687,0.606,1.687,1.2c0,0.851-0.782,1.17-1.687,1.17h-0.775V178.137z"/>
									</svg>
							</a>
						</div>
						<!-- /logo -->

						<div class="mobile-icon-menu">
							<i class="fa fa-bars"></i>
						</div>

						<div class="rrss-desktop">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>

						<!-- nav -->
						<div class="navegacion-home">
							<nav class="nav" role="navigation">
								<div class="desktop-nav">
									<?php html5blank_nav(); ?>
								</div>
							</nav> 
							<div class="buscar-home">
								<i class="fa fa-search"></i>
							</div>
							<div class="buscador-open">
								<div class="buscador-desk">
									<div class="close-search">cerrar buscador <i class="fa fa-close"></i> </div>
									<div class="search-formulario">
										<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
											<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Buscar', 'html5blank' ); ?>">
											<button class="search-submit" type="" role="button"><?php _e( '', 'html5blank' ); ?><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- /nav -->

					</div>

					<!--div class="MenuMobile-Open">
						<div class="header-MenuMobile">
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/casas_logotype.png" alt="Logo">
								</a>
							</div>
							<div class="mobile-icon-menu">
								<i class="fa fa-bars"></i>
							</div>
						</div>
						<div class="search-menu-mob">
							
								<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
									<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Buscar', 'html5blank' ); ?>">
									<button class="search-submit" type="" role="button"><?php _e( '', 'html5blank' ); ?><i class="fa fa-search"></i></button>
								</form>
						</div>
						<div class="menu-mob">
							<nav class="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
						</div>
						<div class="follow-us">
							<ul>
								<li class="title-li"><p>Siguenos en</p></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="logotypes">
							<ul>
								<li><a target="_blank" href="http://www.cosas.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/cosas_logotype.png" alt="Logo Cosas"></li>
								<li><a target="_blank" href="http://www.cosas.com/casas/"><img src="<?php echo get_template_directory_uri(); ?>/img/casas_logotype.png" alt="Logo Casas"></li>
								<li><a target="_blank" href="http://www.cosas.com/couture/"><img src="<?php echo get_template_directory_uri(); ?>/img/cosasc_logotype.png" alt="Logo Cosas Culture"></li>
								<li><a target="_blank" href="http://www.cosas.com/?post_type=lujo"><img src="<?php echo get_template_directory_uri(); ?>/img/cosaslujo_logotype.png" alt="Logo"></li>
								<li><a target="_blank" href="http://www.cosas.com/repost/"><img src="<?php echo get_template_directory_uri(); ?>/img/cosasrepost_logotype.png" alt="Logo"></li>
							</ul>
						</div>
					</div-->

			</header>
			<!-- /header -->
