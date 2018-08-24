var data_config = {
    tag: "visualization",
    mode: "local_files",

    title: "Overview of Educational Technology",
    input_format: "json",
    base_unit: "readers",
    use_area_uri: true,
    is_force_areas: false,
    url_prefix: "http://mendeley.com/catalog/",
    
    show_timeline: false,
    show_dropdown: true,
    show_intro: false,
    show_list:true,
    is_force_papers:true,
	content_based:true,
	
	show_context: false,
	create_title_from_context: false,

    files: [{
        title: "edu1",
        file: "./data/output_zika.json"
    }, {
        title: "edu2",
        file: "./data/edu2.csv"
    }, {
        title: "edu3",
        file: "./data/edu3.csv"
    }, {
        title: "edu4",
        file: "./data/edu4.csv"
    }, {
        title: "edu5",
        file: "./data/edu5.csv"
    }]
};
