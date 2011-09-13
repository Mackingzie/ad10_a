		<div>
				{{#message}}
				<div id="message">{{#text}}<p>{{text}}</p>{{/text}}</div>
				{{/message}}
				<div id="stylized" class="myform">
					<form id="{{form-name}}" name="{{form-name}}" method="post" action="{{form-action}}">
						<h3>{{form-title}}</h3>
						<p>{{form-description}}</p>

						{{#fields}}

						{{#input}}
						<label>
							{{label}}<span class="small">{{description}}</span>
						</label>
						<input type="{{type}}" name="{{name}}" id="{{name}}" {{#value}}value="{{value}}"{{/value}} />
						{{/input}}

						{{/fields}}

						<button type="submit">{{button-text}}</button>

					</form>
				</div>
		</div>
