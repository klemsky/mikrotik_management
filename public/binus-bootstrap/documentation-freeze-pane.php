<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Freeze Pane</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Freeze Pane</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <p><strong>Freeze Pane</strong> digunakan untuk menampilkan data berbentuk table dengan jumlah kolom yang banyak dan bisa melebihi lebar konten yang disediakan. <strong>Freeze Pane</strong> dibuat dengan bantuan plugin <a href="http://www.datatables.net/">Datatables</a>.</p>
                        <p><strong>Freeze Pane Example:</strong></p>
                        <div class="freeze-pane">
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Description</th>
                                        <th>Notes</th>
                                        <th>Quotes</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Milan Baros</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>
                                            <span class="display:block; width: 100px; white-space: normal; word-break: break-word; word-break: break-all;">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </span>
                                        </td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ander Herrera</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Juan Mata</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Eric Cantona</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Steven Gerrard</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Redondo</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Denis Irwin</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Alberto Gilardino</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Andy Cole</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Rivaldo</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Quaresma</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Marc Overmars</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Gonzalo Higuain</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Oliver Kahn</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Paolo Maldini</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Adrian Mutu</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Robert Pires</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Franco Baresi</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Maroune Fellaini</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Gianlugi Buffon</td>
                                        <td>01/01/2015</td>
                                        <td>01/30/2015</td>
                                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td>Mirum est notare quam littera gothica</td>
                                        <td><a href="#">Action</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><a href="#" class="update-freeze-pane">Update Table</a></p>
                        </div>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"freeze-pane"</span> <span class="na">data-fixed-left=</span><span class="s">"2"</span> <span class="na">data-fixed-right=</span><span class="s">"1"</span> <span class="na">data-height=</span><span class="s">"300"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;table&gt;</span>
        <span class="c">&lt;!-- table content --&gt;</span>
    <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Freeze Pane</strong> memiliki tiga option attribute yaitu <span class="text-success">data-fixed-left</span>, <span class="text-success">data-fixed-right</span> dan <span class="text-success">data-height</span>. Option <span class="text-success">data-fixed-left</span> digunakan untuk menentukan jumlah kolom yang di "Freeze" dari sebelah kiri. Sedangkan <span class="text-success">data-fixed-right</span> untuk menentukan jumlah kolom yang di "Freeze" dari sebelah kanan. Dan option <span class="text-success">data-height</span> untuk menentukan tinggi <strong>Freeze Pane</strong>.</p>
                        <p>Script JS:</p>
                        <div class="highlight">
                            <code class="language-js">
<span class="nx">$</span><span class="p">(</span><span class="s">'.freeze-pane'</span><span class="p">)</span><span class="nx">.binus_freeze_pane</span><span class="p">({</span>
    <span class="na">fixed_left</span>  <span class="p">:</span> <span class="kc">2</span>,     <span class="c">// default 1</span>
    <span class="na">fixed_right</span> <span class="p">:</span> <span class="kc">1</span>,     <span class="c">// default 0</span>
    <span class="na">height</span>      <span class="p">:</span> <span class="kc">400</span>    <span class="c">// default 300</span>
<span class="p">});</span>
                            </code>
                        </div>
                        <p>Lokasi file plugin Freeze Pane: <strong>js/plugins/freeze-pane.js</strong>.</p>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>