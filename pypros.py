from collections import deque
import sys, hashlib, time, operator


def stack_string(stack):
	out = ""
	for i in stack:
		out += i.lstrip().rstrip() + ' '
	return out


def indent_string(levels):
	out = ""
	for i in levels:
		out += i
	return out

def check_indent(levels, line):
	indent = line[:line.find(line.lstrip())]
	return indent == indent_string(levels)

def build(filename):

	f = open(filename, 'r')

	indent_level = ['']
	selector_stack = deque()
	output = {}
	depth_inc = False
	encounter = 0

	for line in f:
		if not line.isspace():

			if check_indent(indent_level, line) and not depth_inc:
				if line.find(';') == -1:
					selector_stack.append(line.rstrip().lstrip())
					selector = stack_string(selector_stack)
					if selector not in output:
						output[stack_string(selector_stack)] = [encounter, []]
						encounter += 1

					depth_inc = True
				else:
					output[stack_string(selector_stack)][1].append(line)
			else:

				indent = line[:line.find(line.lstrip())]
				if depth_inc and len(indent_string(indent_level)) >= len(indent):

					selector_stack.pop()

					if line.find(';') == -1:
						selector_stack.append(line.rstrip().lstrip())
						selector = stack_string(selector_stack)
						if selector not in output:
							output[stack_string(selector_stack)] = [encounter, []]
							encounter += 1
						depth_inc = True
					else:
						depth_inc = False
				elif depth_inc and len(indent_string(indent_level)) < len(indent):

					if line.find(';') == -1:
						selector_stack.append(line.rstrip().lstrip())
						selector = stack_string(selector_stack)
						if selector not in output:
							output[stack_string(selector_stack)] = [encounter, []]
							encounter += 1

						added_indent = indent[len(indent_string(indent_level)):]

						indent_level.append(added_indent)

						depth_inc = True
					else:
						added_indent = indent[len(indent_string(indent_level)):]

						indent_level.append(added_indent)
						output[stack_string(selector_stack)][1].append(line)
						depth_inc = False
				elif depth_inc:


					selector_stack.pop()
					depth_inc = False


				else:

					while indent_string(indent_level) != indent:

						selector_stack.pop()
						indent_level.pop()
					if line.find(';') == -1:
						selector_stack.append(line.rstrip().lstrip())
						selector = stack_string(selector_stack)
						if selector not in output:
							output[stack_string(selector_stack)] = [encounter, []]
							encounter += 1

						depth_inc = True
					else:
						output[stack_string(selector_stack)][1].append(line)

	f.close()
	return output

def write(filename, data):

	f = open(filename, 'w')
	out = ''
	keys = sorted(data.items(), key=operator.itemgetter(1))
	for selector, _ in keys:
		sel = selector.replace(' &', '')
		out += sel + '{\n'
		for i in data[selector][1]:


			out += '\t' + i.lstrip().rstrip() + '\n'
		out += '}\n\n'

	f.write(out)
	f.close()

def process(filename):
	print('Processing', filename+'...')
	css_file = filename+'.css' if not filename.endswith('.pyp') else filename[:filename.index('.pyp')]+'.css'
	pyp_file = filename+'.pyp' if not filename.endswith('.pyp') else filename
	write(css_file, build(pyp_file))

if __name__ == '__main__':

	watched = {}
	watch = False

	for arg in sys.argv[1:]:
		if arg.startswith('-'):
			flags = arg[1:].split()
			for flag in flags:
				if flag == 'w':
					watch = True
		else:
			if watch:
				key = arg if arg.endswith('.pyp') else arg + '.pyp'
				f = open(key, 'rb')
				hash_obj = hashlib.md5()
				hash_obj.update(f.read())
				digest = hash_obj.hexdigest()
				watched[key] = digest

				f.close()
			process(arg)

	while watch:

		for filename in watched:
			name = filename if filename.endswith('.pyp') else filename + '.pyp'
			f = open(name, 'rb')
			data = f.read()
			f.close()
			hash_obj = hashlib.md5()
			hash_obj.update(data)
			digest = hash_obj.hexdigest()
			if watched[name] != digest:

				process(name)
				watched[name] = digest

		time.sleep(1)







